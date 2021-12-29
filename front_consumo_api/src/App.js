import { useState } from "react";
import { Input, Select } from "./components";
import "./App.css";
function App() {
  const [operadorA, setOperadorA] = useState(0);
  const [operadorB, setOperadorB] = useState(0);
  const [operador, setOperador] = useState("add");
  const [resultado, setResultado] = useState("");
  const handleSubmit = (e) => {
    e.preventDefault();
    const requestOptions = {
      method: "GET",
      redirect: "follow",
    };

    fetch(
      `http://127.0.0.1:8000/${operador}/${operadorA}/${operadorB}`,
      requestOptions
    )
      .then((response) => response.json())
      .then((data) => setResultado(data?.result || "error"))
      .catch((error) => console.log("error", error));
  };
  const handleSelect = (e) => {
    setOperador(e.target.value);
  };
  return (
    <form onSubmit={(e) => handleSubmit(e)}>
      <div className="contenedor">
        <div className="col grid_4_of_12">
          <Input
            label="Primer operador"
            name="operadorA"
            type="number"
            placeholder="Ingrese el primer numero"
            onChange={(e) => setOperadorA(e.target.value)}
          />{" "}
        </div>

        <div className="col grid_4_of_12">
          {" "}
          <Input
            label="Segundo operador"
            name="operadorB"
            type="number"
            placeholder="Ingrese el segundo numero"
            onChange={(e) => setOperadorB(e.target.value)}
          />{" "}
        </div>

        <div className="col grid_4_of_12">
          {" "}
          <Select
            label="Operación"
            name="operador"
            optiones={[
              { value: "add", label: "Suma" },
              { value: "sub", label: "Resta" },
              { value: "mul", label: "Multiplicación" },
              { value: "div", label: "División" },
            ]}
            placeholder="Seleccione el operador"
            onChange={(e) => handleSelect(e)}
          />{" "}
        </div>

        <div className="col grid_12_of_12">
          {" "}
          <button type="submit" className="button">
            Calcular
          </button>{" "}
        </div>
      </div>
      {resultado && <h1>{resultado}</h1>}
    </form>
  );
}

export default App;
