let wc_header = new Headers();
wc_header.append("Nonce", wc_nonce);

const opt = {
    method: 'POST',
    headers: wc_header,
    redirect: 'follow'
};

fetch("http://localhost:8000/wordpress/wp-json/wc/store/v1/cart/add-item?id=43&quantity=4", opt)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));