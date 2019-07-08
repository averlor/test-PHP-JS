'use strict';
var form = document.getElementById('form');
var username = document.getElementById('username');
var password = document.getElementById('password');
var email = document.getElementById('email');
var animal = document.getElementById('animal');

var data = {}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    data.name = username.value,
    data.password = password.value,
    data.email = email.value,
    data.animal = animal.value

    console.log(data);

})

// ajax

// get data from server
var order = [];
order.push({
    index = 1,
    username : data.username,
    password : data.password,
    email : data.email,
    animal : data.animal,
    created : data.created,
    comment: data.comment,
    delOrder: X
})

// added row
function createRow(data) {

    // create new row
    var tbody = document.querySelector('tbody');
    var row = document.createElement('tr');

    // create td
    var index = document.createElement('td');
    var username = document.createElement('td');
    var password = document.createElement('td');
    var email = document.createElement('td');
    var animal = document.createElement('td');
    var created = document.createElement('td');
    var comment = document.createElement('td');
    var delOrder = document.createElement('td');

    comment.setAttribute('contenteditable','true');

    // filling with data
    

    // insert td in row
    row.appendChild(index);
    row.appendChild(username);
    row.appendChild(password);
    row.appendChild(email);
    row.appendChild(animal);
    row.appendChild(created);
    row.appendChild(comment);
    row.appendChild(delOrder);

    tbody.appendChild(row);
}