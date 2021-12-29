import React from "react";

const Input = ({ label, name, type, ...props }) => {
  return (
    <>
      <label htmlFor={name}>{label}</label>
      <br />
      <input type={type} name={name} {...props} />
    </>
  );
};

export default Input;
