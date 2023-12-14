<?php

// FLASH MESSAGE
function flashmsg($name = '', $message = '', $class = 'alert alert-success')
{
   if (!empty($name)) {
      if (!empty($message) && empty($_SESSION[$name])) {
         if (!empty($_SESSION[$name])) {
            unset($_SESSION[$name]);
         }

         if (!empty($_SESSION[$name . '_class'])) {
            unset($_SESSION[$name . '_class']);
         }

         $_SESSION[$name] = $message;
         $_SESSION[$name . '_class'] = $class;
      } elseif (empty($message) && !empty($_SESSION[$name])) {
         $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
         echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
         unset($_SESSION[$name]);
         unset($_SESSION[$name . '_class']);
      }
   }
}

// RANDOM NUMBER
function random_num($length)
{
   $text = "";
   $len = rand($length, $length);

   for ($i = 0; $i < $len; $i++) {
      $text .= rand(2, 9);
   }
   return $text;
}

// PAGE REDIRECT
function redirect($page)
{
   // header('Location: ' . URLROOT . '/' . $page);

   echo "
      <script>
         window.location.href='" . URLROOT . "/" . $page . "';
      </script>
   ";
}
