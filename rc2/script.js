document.querySelector("#exit").onclick = function(){
    session_start();
    unset($_SESSION['user']); // или $_SESSION = array() для очистки всех данных сессии
    session_destroy();
    header('Location: index.php');
  }