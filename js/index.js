function get_token()
{
    let token = document.getElementById("token_input").value;
    var tag = document.createElement("p");
    var text = document.createTextNode("Invalid token");
    tag.appendChild(text);
    var element = document.getElementById("token");
    element.appendChild(tag);
}
