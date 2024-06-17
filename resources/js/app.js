import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start(); 


Echo.channel('notification').listen('TestNotification', function(data) {
  console.log(JSON.stringify(data));
});
Echo.channel('chat').listen('SendMessageEvent', function(message, user) {
  console.log(JSON.stringify(message));
  console.log(JSON.stringify(user));
});
Echo.channel('users').listen('UserLoggedIn', function(e) {
  console.log('user logged in '); 
  
  // Select the div based on user ID or username
  const userDiv = document.getElementById(`${e.user.name}`);
  if (userDiv) {
      userDiv.innerText = `Online`;
      userDiv.style.color = "green";
  }  
  
});
Echo.channel('users').listen('UserLoggedOut', function(e) {
  console.log('user logged out '); 
  
  // Select the div based on user ID or username
  const userDiv = document.getElementById(`${e.user.name}`);
  if (userDiv) {
      userDiv.innerText = `Offline`;
      userDiv.style.color = "red";
  }  
  
});
