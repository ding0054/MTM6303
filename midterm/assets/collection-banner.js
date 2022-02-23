 function renderProductImage(product) {
    if (product.image === null) {
      return '';
    }

    return (
      '<img class="predictive-search-item__image lazyload" src="' +
      product.image.url +
      '" data-src="' +
      product.image.url +
      '" data-image alt="' +
      product.image.alt +
      '" />'
    );
  }