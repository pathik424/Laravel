<?php require "headerForCart.php"; ?>


<div class="container">
    <div class="row" id="DispData">

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function getProductsData(params) {
        fetch("http://localhost:8000/api/getallproducts").then((result) => result.json()).then((result) => {
            // console.log(result);
            HTMLCard = ""
            result.forEach(element => {
                HTMLCard += `
                    <div class="col-lg-3 mt-3">
                    <div class="card">
                    <img src="http://localhost:8000/uploads/${element.image}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${element.title}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form method="post" onsubmit="addtocart(${element.id})" id="cartform${element.id}">
                        <input type="hidden" name="title" value="${element.title}">
                        <input type="hidden" name="price" value="${element.price}">
                        <input type="hidden" name="quantity" value="${element.quantity}">
                        <button>Add to cart</button>
                        </form>
                    </div>
                    </div>
                    </div>`

            });
            // console.log(HTMLCard);
            document.getElementById("DispData").innerHTML = HTMLCard
        })
    }
    getProductsData()

    function addtocart(e) {
        console.log("called", e);
        event.preventDefault()
        // console.log( $("#cartform"+e).serialize() );
        // console.log(  );
        let FormData = $("#cartform" + e).serializeArray()
        var result = {};
        $.each(FormData, function() {
            result[this.name] = this.value;
        });
        // FormData.forEach(element => { });
        // console.log(result);
        fetch("http://localhost:8000/api/savetocart").then((result) => result.json()).then((result) => {

        })
    }
</script>

</body>

</html>

<?php

/*

1. console.log("hello") = Debugging tools like a Laravel in DD

2. Function VAR LET CONST =

             VAR
             //Global Scope
             var username = "Admin123"
             username = "user123"   //Re-Assign
             var username = "Ankit" //Re-Declaration

             LET
             let password = 123456
             password = 0987654321  //Re-Assign
             // let password = 1  //You Cannot Redeclare
             console.log(password);

             CONST
             const name = "ankit"
             // name = "jaimin" // Cannot be Re-Assign
             // const name = "jaimin" // Cannot be Re-Declared
             console.log(name);
            




*/

?>
