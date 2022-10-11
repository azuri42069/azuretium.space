let language = window.navigator.language;
let languageFistTwo = language.substr(0,2); // To only keep the first 2 characters.
let currentLocation = document.getElementsByTagName('php')[0].getAttribute('lang-js')

switch (languageFistTwo) { 
  case "ru":
   if(currentLocation != 'ru'){
      window.location.href = 'index_ru.php';
   }
    break;

  default:
     if(currentLocation != 'en'){
      window.location.href = 'index.php';
     }
} 