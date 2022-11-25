
            function criarLinhaTabela(pobjReturnJSON) {
                let tb = document.getElementById("tab");
                 let tr = document.createElement("tr");

                let tdNome = document.createElement("td");
                textnode = document.createTextNode(pobjReturnJSON.Nome);
                td2.appendChild(textnode); 
                tr.appendChild(tdNome);
    
                let tdId = document.createElement("td"); 
                textnode = document.createTextNode(pobjReturnJSON.Id);
                td5.appendChild(textnode);
                tr.appendChild(tdId); 

                let tdPeriodo = document.createElement("td"); 
                textnode = document.createTextNode(pobjReturnJSON.Periodo);
                td3.appendChild(textnode); 
                tr.appendChild(tdPeriodo); 

                let tdIdPreRequisitos = document.createElement("td");
                textnode = document.createTextNode(pobjReturnJSON.IdPreRequisito);
                td3.appendChild(textnode);
                tr.appendChild(tdIdPreRequisito);

                let tdCreditos= document.createElement("td"); 
                textnode = document.createTextNode(pobjReturnJSON.Creditos);
                td5.appendChild(textnode);
                tr.appendChild(tdCreditos); 
                
                textnode = document.createTextNode("Listar1");
                tagP.appendChild(textnode);
    
                td4.appendChild(tagP);
                tr.appendChild(td4);
    
                tb.appendChild(tr);
            }

    
            function carregaDisciplina() 
            {
    
                let Id = document.getElementById("id").value;
                let xmlHttp = new XMLHttpRequest();
    
                xmlHttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        let objAlunos = this.responseText;
                        let obj = JSON.parse(this.responseText);
                        criarLinhaTabela(obj);
                    }
                }
                xmlHttp.open("GET", "http://localhost/3DAW2022.2Leonardo/JSCrud/AV1_em_JS/listarUmAV1?id=" + id);
                xmlHttp.send();
    
            }

            function buscarDisciplina(matricula) {
                let xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function() {
                    console.log("mudou status: " + this.readyState);
                    if (this.readyState == 4 && this.status == 200) {
                        //    console.log("Chegou resposta: " + this.responseText)
                        //    document.getElementById("msg").innerHTML = this.responseText;
                        let obj = JSON.parse(this.responseText);
                        document.getElementById("nomeAlt").value = obj.nome;
                        document.getElementById("matAlt").value = obj.matricula;
                        document.getElementById("emailAlt").value = obj.email;
                        let formAlt = document.getElementById("formAlterar");
                        formAlt.style.display = "block";
                    }
                }
                xmlHttp.open("GET", "http://localhost/3dawmanha/ex12_buscarAluno.php?mat=" + matricula);
                xmlHttp.send();
            }