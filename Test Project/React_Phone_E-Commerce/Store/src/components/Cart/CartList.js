import React, { Component } from "react";
import CartItem from "./CartItem";
export default class CartList extends Component {
  state = {};
  render() {
    return (
      <div>
        hello from cartList
        <CartItem></CartItem>
      </div>
    );
  }
}
