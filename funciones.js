/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function fetchJSON_POST(data,url)
{
    fetch(url,{
                method: 'POST',
                body: data  })
            .then(function (response) {
                if (response.ok){
                    return response.json();
                } else{
                    throw "error";
                }})
            .catch(function (error) {
                console.log(error);
            });
}

function fetchTEXT_POST(data,url)
{
    fetch(url,{
                method: 'POST',
                body: data  })
            .then(function (response) {
                if (response.ok){
                   return response.text();
                } else{
                   throw "error";
                }}).then((data=>
            {
                return data;
            }))
            .catch(function (error) {
                console.log(error);
            });
            
}