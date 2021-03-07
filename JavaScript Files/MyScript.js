

function CreateMenu(links)
{
    var Menu = document.getElementsByClassName("Menu");
    var aTags = new Array(links.length);
    for(let i = 0; i < aTags.length; i++)
    {
        aTags[i] = document.createElement("a");
        aTags[i].setAttribute("href", links[i]);
        aTags[i].setAttribute("class", "MenuItem");
        var position = links[i].search(".html");
        var textnode = document.createTextNode(links[i].slice(0,position));
        aTags[i].appendChild(textnode);                
    }
    //Menu.item(i).innerHTML += " ";
    for(let i = 0; i < Menu.length; i++)
    {
        for(let j = 0; j < aTags.length; j++)
        {
            
            Menu.item(i).appendChild(aTags[j]);
            //aTags[j].appendChild(document.createElement("p"));
            if(j != aTags.length-1) Menu.item(i).innerHTML += " | ";
        }            
    }
}