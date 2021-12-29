import React from "react";

const Select = ({ label, name, optiones, ...props }) => {
  return (
    <>
      <label htmlFor={name}>{label}</label>
      <br />
      <select name={name} {...props}>
        {optiones.map((option) => (
          <option
            key={option.value}
            value={option.value}
            selected={option.selected}
          >
            {option.label}
          </option>
        ))}
      </select>
    </>
  );
};

export default Select;
