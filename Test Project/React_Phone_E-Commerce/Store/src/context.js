import React, { Component } from "react";

const ProductContext = React.createContext();
//Provider
//Consumer

class ProductProvider extends Component {
  render() {
    return (
      <ProductContext.Provider value="hello form context">
        {this.props.children}
      </ProductContext.Provider>
    );
  }
}

const ProductConsumer  = ProductContext.Consumer;

export {ProductProvider,ProductConsumer}