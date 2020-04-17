import React, { Component } from "react";
import { storeProducts, detailProduct } from "./data";
const ProductContext = React.createContext();
//Provider
//Consumer

class ProductProvider extends Component {
  state = {
    products: [],
    detailProduct: detailProduct,
    cart: storeProducts,
    modalOpen: false,
    modelProduct: detailProduct,
    cartSubTotal: 0,
    cartTax: 0,
    cartTotal: 0,
  };

  componentDidMount() {
    this.setProducts();
  }

  setProducts = () => {
    let products = [];
    storeProducts.forEach((item) => {
      const singleItem = { ...item };
      products = [...products, singleItem];
    });

    this.setState(() => {
      return { products };
    });
  };

  getItem = (id) => {
    const product = this.state.products.find((item) => item.id === id);
    return product;
  };

  handleDetail = (id) => {
    // console.log("hello from detail");
    const product = this.getItem(id);
    this.setState(() => {
      return { detailProduct: product };
    });
  };

  addToCart = (id) => {
    // console.log(`hello from add to cart.id is ${id}`);
    let tempProducts = [...this.state.products];
    const index = tempProducts.indexOf(this.getItem(id));
    const product = tempProducts[index];
    product.inCart = true;
    product.count = 1;
    const price = product.price;
    product.total = price;

    this.setState(
      () => {
        return {
          products: [...tempProducts],
          cart: [...this.state.cart, product],
          detailProduct: { ...product },
        };
      },
      () => {
        console.log(this.state);
      }
    );
  };
  openModal = (id) => {
    const product = this.getItem(id);
    this.setState(() => {
      return { modelProduct: product, modalOpen: true };
    });
  };

  closeModal = () => {
    this.setState(() => {
      return { modalOpen: false };
    });
  };

  increment = (id) => {
    console.log("this is increment  method ");
  };

  decrement = (id) => {
    console.log("this is decrement method ");
  };

  removeItem = (id) => {
    console.log("Item removed ");
  };

  clearCard = () => {
    console.log("cart was cleared");
  };
  render() {
    return (
      <ProductContext.Provider
        value={{
          ...this.state,
          handleDetail: this.handleDetail,
          addToCart: this.addToCart,
          openModal: this.openModal,
          closeModal: this.closeModal,
          increment: this.increment,
          decrement: this.decrement,
          removeItem: this.removeItem,
          clearCard: this.clearCard,
        }}
      >
        {/* <button onClick={this.tester}>Test me ! </button> */}
        {this.props.children}
      </ProductContext.Provider>
    );
  }
}

// const ProductConsumer = ProductContext.Consumer;

// export { ProductProvider, ProductConsumer };
const ProductConsumer = ProductContext.Consumer;

export { ProductProvider, ProductConsumer };
