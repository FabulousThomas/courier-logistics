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

// RANDOM min FUNCTION
function random_num($min, $max)
{
   return rand($min, $max);
}

// PAGE REDIRECT
function redirect($page)
{
   header('Location: ' . $page);
}
