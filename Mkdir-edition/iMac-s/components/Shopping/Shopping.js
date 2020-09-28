class Shopping {



    handlerClear() {

        ROOT_SHOPPING.innerHTML = '';
    }

    removeAllthat() {
        window.localStorage.clear();

    }





    render() {

        const productsStore = localStorageUtil.getProducts();
        let htmlCatalog = '';
        let sumCatalog = 0;
        let catalogList = '';
        CATALOG.forEach(({ id, name, price }) => {
            if (productsStore.indexOf(id) !== -1) {
                // let count = document.getElementById('countOfProducts');
                // console.log("count - " + Number(count));
                htmlCatalog += `
                <tr>
                    <td class="shopping-element__name">${name}</td>
                    <td class="shopping-element__price">${Number(price)} USD</td>
                    
                    <td> 
                        <input value="1" id="countOfProducts" name="countOfProducts" style="width: 50%;text-align:center;"/>
                    </td>
                </tr>
               
                 
                `;
                catalogList += `${id}  ${name}  ${price.toLocaleString()}<br>`;
                sumCatalog += price;

            }
        });
        CATALOG2.forEach(({ id, name, price }) => {
            if (productsStore.indexOf(id) !== -1) {
                htmlCatalog += `
                <tr>
                    <td class="shopping-element__name">${name}</td>
                    <td class="shopping-element__price">${price.toLocaleString()} USD</td>
                    <td class="shopping-element__num"><button class="plus">+</button> <input style="width: 20%;" type="" class="num-item"  name="num-item" value="" aria-label="num" placeholder="" class="form-control" > <div class="minus">-</div> </td>
                </tr>

                `;
                catalogList += `${id}  ${name}  ${price.toLocaleString()}<br>`;
                sumCatalog += price;
            }
        });
        CATALOG3.forEach(({ id, name, price }) => {
            if (productsStore.indexOf(id) !== -1) {
                htmlCatalog += `
                <tr>
                    <td class="shopping-element__name">${name}</td>
                    <td class="shopping-element__price">${price.toLocaleString()} USD</td>
                    <td class="shopping-element__num"><button class="plus">+</button> <input style="width: 20%;" type="" class="num-item"  name="num-item" value="" aria-label="num" placeholder="" class="form-control" > <div class="minus">-</div> </td>
                </tr>

                `;
                catalogList += `${id}  ${name}  ${price.toLocaleString()}<br>`;
                sumCatalog += price;

            }
        });



        let html = `
            <div id="bag" class="shopping-container" >
             
              <div class="shopping__close" onclick="shoppingPage.handlerClear()"></div> 
            `;
        if (htmlCatalog === "") {
            html += `

                    <h1 style=" text-align: center;">Bag is empty!</h1> 
                    
                    </div>
                `;
        } else {
            html += ` 
                 <table style="text-align:center;">
                
                    <tr class="your-bag">Your bag</tr>
                    <tr> 
                        <td> 
                            Name of product
                        </td>
                        <td> 
                            Price
                        </td>
                        <td> 
                            Count
                        </td>
                    </tr>
                ${htmlCatalog}
                
                <tr>
                <td class="shopping-element__sum">Sum</td>
                <td class="shopping-element__price" name="sumNstore">${sumCatalog.toLocaleString()} USD</td>
                </tr>
                
                </table>
                
                <form id="store" method="post">
                    <input type="hidden" value="2222" name="idstore" />
                    <input class="form-control border-300 mt-3" name="nameNstore" type="text" aria-label="Name" placeholder="First and second name" class="form-control" required>
                    <input type="hidden" id="" class="form-control border-300 mt-3" name="sumNstore" value="${sumCatalog.toLocaleString()}" aria-label="Price" placeholder="Price" class="form-control" >
                    <input type="hidden" id="" class="form-control border-300 mt-3" name="orderstore" value="${catalogList}" aria-label="List" placeholder="List" class="form-control" >
                    <input id="phone-num2" class="form-control border-300 mt-3" name="phonestore" value="" type="text" aria-label="Phone" placeholder="Phone" class="form-control" required>
                    
                    <button id="send-button" style="margin-bottom: 16px; width:50%; margin:auto;" class="form-control border-300 mt-3" onclick="testStore(document.getElementById('phone-num2'));">  
                            To order 
                    </button>
                     
                    
                </form>
            </div>
            
           
   
            
        `;
        }


        ROOT_SHOPPING.innerHTML = html;

    }
}
const shoppingPage = new Shopping();