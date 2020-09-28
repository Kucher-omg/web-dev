class Header {

    handlerOpenShoppingPage() {
        shoppingPage.render();
    }

    render(count) {
        const html = `
        <div class="counter" onclick="headerPage.handlerOpenShoppingPage()">
        <img src="content/home/busket.png" alt="BackMac" style="margin-bottom:20px; ">
            <span style="color:#9B59B6; font-size:2em; margin-right:20px;">${count}</span>
        </div>
        `;
        ROOT_HEADER.innerHTML = html;
    }


}
const headerPage = new Header();
const productsStore = localStorageUtil.getProducts();

headerPage.render(productsStore.length);