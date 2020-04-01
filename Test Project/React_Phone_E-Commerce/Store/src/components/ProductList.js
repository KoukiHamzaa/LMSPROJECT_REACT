import React, { Component } from "react";
import Product from "./Product";
export default class ProductList extends Component {
  state = {};
  render() {
    return (
      <div>
        {/* <h3>Hello from product list</h3> */}
        <Product />
      </div>
    );
  }
}
