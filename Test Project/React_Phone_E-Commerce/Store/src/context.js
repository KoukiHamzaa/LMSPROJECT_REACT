import React, { Component } from "react";
import { storeProducts, detailProduct } from "./data";
const ProductContext = React.createContext();
//Provider
//Consumer

class ProductProvider extends Component {
  state = {
    products: [],
    detailProduct: detailProduct,
    cart: [],
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
          cart: [...this.state.cart,product],
          detailProduct: { ...product },
        };
      },
      () => {
        console.log(this.state);
      }
    );
  };

  // tester = () => {
  //   console.log("state products :", this.state.products[0].inCart);
  //   console.log("Data products :", storeProducts[0].inCart);

  //   const tempProducts = [...this.state.products];
  //   tempProducts[0].inCart = true;
  //   this.setState(
  //     () => {
  //       return { products: tempProducts };
  //     },
  //     () => {
  //       console.log("state products :", this.state.products[0].inCart);
  //       console.log("Data products :", storeProducts[0].inCart);
  //     }
  //   );
  // };

  render() {
    return (
      <ProductContext.Provider
        value={{
          ...this.state,
          handleDetail: this.handleDetail,
          addToCart: this.addToCart,
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
