// add input
let index = 2;
function addInput() {
  const form = document.getElementsByClassName("form-add-post")[0];
  const products = form.querySelector(".product-items");

  products.innerHTML += `<div class="product-item" id="block${index}">
  <div class="sort-item">
      <label>Цена</label>
      <select class="sort sort-product" name="block-1${index}">
          <option value="0">Не выбран</option>
          <option value="1">Конфеты 150 грн</option>
      </select>
  </div>
  <div class="form-group-wrap juctify">
  <div class="form-group">
    <label>Лот</label>
    <input type="text" name="lot${index}" id="txtvalue${index}">
  </div>
  <div class="form-group">
    <label>Цена</label>
    <input type="text" name="price${index}" class="price">
  </div>
  </div>
  <div class="form-group">
  <label>Адрес</label>
  <input type="text" name="adress${index}" placeholder="Текст котрорый будет выводиться покупателю">
  </div>
  </div>`;

  index++;
}