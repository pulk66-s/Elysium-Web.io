const http = require('http'); //to launch server
const mysql = require('mysql'); //mysql module for db

// DB information
const connection = mysql.createConnection({
    host     : "eu-cdbr-west-02.cleardb.net",
    user     : "bac1b7d2441b26",
    password : "76fe7eae",
    database : "heroku_9b6fd0f2559f9f2"
});
connection.connect();

//Server information
const hostname = '127.0.0.1';
const port = 3000;

//Server creation
const server = http.createServer((req, res) => { //req => request / res => response
    res.statusCode = 200; // OK Code
    res.setHeader('Content-Type', 'text/plain'); 
    res.end('Hello World I am Johny Halliday'); //end of the request
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});

// connection.query('SELECT 1 + 1 AS solution', function (error, results, fields) {
//     if (error) throw error;
//     console.log('The solution is: ', results[0].solution);
// });

connection.query("SELECT * from card_list where Id=1", (err, res, fields) => {
    if (err) 
        throw err
    console.log(res);
});

////

 
 
