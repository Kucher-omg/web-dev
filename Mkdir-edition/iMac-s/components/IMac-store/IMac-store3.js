class Products {

    constructor() {
        this.classNameActive = 'products-element__btn_active';
        this.labelAdd = 'Add';
        this.labelRemove = "Remove";
    }

    handlerSetLocalStorage(element, id) {
        const { pushProduct, products } = localStorageUtil.putProducts(id);

        if (pushProduct) {
            element.classList.add(this.classNameActive);
            element.innerText = this.labelRemove;
        } else {
            element.classList.remove(this.classNameActive);
            element.innerText = this.labelAdd;
        }

        headerPage.render(products.length);
    }

    render() {
        const productsStore = localStorageUtil.getProducts();
        let htmlCatalog = '';

        CATALOG3.forEach(({ id, name, text, price, img }) => {
            let activeClass = '';
            let activeText = '';

            if (productsStore.indexOf(id) === -1) {
                activeText = this.labelAdd;
            } else {
                activeClass = ' ' + this.classNameActive;
                activeText = this.labelRemove;
            }

            htmlCatalog += `
            <div class="col-12 col-md-6 col-lg-4" style="margin:0 0 6% 0;">
                <div class="card">
                    <img src="${img}" class="card-img-top" alt="iMac-27">
                    <div class="card-body">
                    <h5 class="card-title">${name}</h5>
                        <p class="card-text">${text}</p>
                        <h5 class="price">${price}</h5>
                        <button class="products-element__btn${activeClass}" onclick="productsPage.handlerSetLocalStorage(this, '${id}');">
                            ${activeText}
                        </button>
                    </div>
                </div>
            </div>
            `;
        });
        const html = `
        <h2 id="block-nameMAC" class="text-center" style="padding-bottom:60px;">
            Store
        </h2>
        <div class="row iMac-store">
            ${htmlCatalog}
        </div>
        `;
        ROOT_PRODUCTS_3.innerHTML = html;
    }
}

const productsPage = new Products();

productsPage.render();