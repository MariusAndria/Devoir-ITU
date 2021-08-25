<!DOCTYPE html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SUPER MARKET</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./js/bootstrap.min.js'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/bootstrap.min.css'>
    <script src='main.js'></script>

    <style>
        * {
            box-sizing: border-box;
        }
        
        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
        
        #table {
            border-collapse: collapse;
            width: 100%;
            height: 10%;
            border: 1px solid #ddd;
            font-size: 18px;
            overflow-y: scroll;
        }
        
        #table th,
        #table td {
            text-align: left;
            padding: 12px;
        }
        
        #table tr {
            border-bottom: 1px solid #ddd;
        }
        
        #table tr.header,
        #table tr:hover {
            background-color: #f1f1f1;
        }
    </style>

</head>


<body>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <center>
                    <h1>C A I S S E 1</h1>
                </center>
            </div>
            <div class="col-md-4">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
            <div class="col-md-6">
                <center>
                    <h1>Liste des produits</h1>
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher par categorie..." title="Type in a name">
                </center>
            </div>

        </div>

        <br>

        <center>
            <table id="table">
                <thead class="thead-dark">
                    <tr class="header">
                        <th style="width:20%;">CATEGORIE</th>
                        <th style="width:20%;">NOM DE PRODUITS</th>
                        <th style="width:15%;">PHOTOS</th>
                        <th style="width:20%;">PRIX UNITAIRE</th>
                        <th style="width:5%;">QUANTITE</th>
                        <th style="width:5%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Germany</td>
                        <td>Germany</td>
                        <td>1000</td>
                        <td>
                            <form action="/action_page.php">
                                <input type="number" id="quantity" name="quantity" min="1" max="5">
                            </form>
                        </td>
                        <td>
                            <button id="myBtn">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Berglunds snabbkop</td>
                        <td>Germany</td>
                        <td>Germany</td>
                        <td>500</td>
                        <td>
                            <form action="/action_page.php">
                                <input type="number" id="quantity" name="quantity" min="1" max="6">
                            </form>
                        </td>
                        <td>
                            <button id="myBtn">+</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>

        <br>
        <br>

        <div class="row">
            <div class="col-md-6">
                <center>
                    <h1>Liste des achats</h1>
                </center>
            </div>
            <div class="col-md-6">
                <center>

                </center>
            </div>

        </div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><span class="nobr">Produit</span></th>
                                <th><span class="nobr">Prix Unitaire</span></th>
                                <th><span class="nobr"> Quantité</span></th>
                                <th><span class="nobr">Montant</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p id="demo"></p>
                                </td>
                                <td>
                                    
                                </td>

                            </tr>
                            
                            <tr>
                                <td id="demo"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total : </td>
                            </tr>
                        </tbody>
                    </table>
                </table>

                <button onclick="window.print()">Valider</button>
                <button onclick="window.print()">Imprimer le facture</button>
            </div>
        </div>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("table");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

        <script>
            let p1 = "anana";
            let p2 = "vary";
            document.getElementById("myBtn").addEventListener("click", function() {
                myFunction(p1, p2);
            });

            function myFunction(a, b) {
                document.getElementById("demo").innerHTML = a;
            }
        </script>
    </div>

</body>


</html>