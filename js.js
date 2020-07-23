/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showHint(str) {
    if (str.length === 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        //hacemos la consulta
        try {
            let data = new FormData();

            data.append('st', str);
            fetch('servidor.php', {
                method: 'POST',
                body: data})
                    .then(function (response) {
                        if (response.ok) {
                            return response.text();
                        } else {
                            throw "error";
                        }
                    }).then(function(data)
                    {
                        document.getElementById("txtHint").innerText = data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
        } catch (err) {
            document.getElementById("txtHint").innerText = err;
        }


    }

}
