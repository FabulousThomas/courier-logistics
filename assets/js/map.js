function initMap() {
    var location = { lat: 6.462660, lng: 3.388040 };
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });

    // Get user's location
    if ('geolocation' in navigator) {
        navigator.geolocation.getCurrentPosition(
            position => {
                console.log(`Lat: ${position.coords.latitude} Lng: ${position.coords.longitude}`);

                // Set marker's position.
                marker.setPosition({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                });

                const getPositionErrorMessage = code => {
                    switch (code) {
                        case 1:
                            return 'Permission denied.';
                        case 2:
                            return 'Position unavailable.';
                        case 3:
                            return 'Timeout reached.';
                        default:
                            return null;
                    }
                }

                // Center map to user's position.
                map.panTo({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                });
            },
            err => alert(`Error (${err.code}): ${getPositionErrorMessage(err.code)}`)
        );
    } else {
        alert('Geolocation is not supported by your browser.');
    }
}

// const createMap = ({ lat, lng }) => {
//   return new google.maps.Map(document.getElementById('map'), {
//     center: { lat, lng },
//     zoom: 15
//   });
// };

// const createMarker = ({ map, position }) => {
//   return new google.maps.Marker({ map, position });
// };

// const getCurrentPosition = ({ onSuccess, onError = () => { } }) => {
//   if ('geolocation' in navigator === false) {
//     return onError(new Error('Geolocation is not supported by your browser.'));
//   }

//   return navigator.geolocation.getCurrentPosition(onSuccess, onError);
// };

// const getPositionErrorMessage = code => {
//   switch (code) {
//     case 1:
//       return 'Permission denied.';
//     case 2:
//       return 'Position unavailable.';
//     case 3:
//       return 'Timeout reached.';
//     default:
//       return null;
//   }
// }

// function init() {
//   const initialPosition = { lat: 59.325, lng: 18.069 };
//   const map = createMap(initialPosition);
//   const marker = createMarker({ map, position: initialPosition });

//   getCurrentPosition({
//     onSuccess: ({ coords: { latitude: lat, longitude: lng } }) => {
//       marker.setPosition({ lat, lng });
//       map.panTo({ lat, lng });
//     },
//     onError: err =>
//       alert(`Error: ${getPositionErrorMessage(err.code) || err.message}`)
//   });
// }