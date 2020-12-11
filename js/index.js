function get_token()
{
    let token = document.getElementById("token_input").value;
    let express = require("express")
    let mysql = require("mysql")
    let connect = mysql.createConnection({
        host    : "localhost",
        user    : "root",
        password: "",
        database: "sampleDB"
    });
    let app = express();

    app.listen(1337)
    connect.connect((err) => {
        if (err)
            console.log("Error");
        else
            console.log("Connected")
    });
    

    var tag = document.createElement("p");
    var text = document.createTextNode("Invalid token");
    tag.appendChild(text);
    var element = document.getElementById("token");
    element.appendChild(tag);
}
