import logo from './logo.svg';
import './App.css';
import { Formulario,Label,Input } from './elementos/Formularios';
import {BrowserRouter,Route,Routes,Link,Navigate} from "react-router-dom";
import CreateInterested from './componentes/Create'
function App() {
  return (
    <BrowserRouter>
    <nav className="navbar navbar-expand navbar-light bg-light">
                <div className="nav navbar-nav">
                    <div className="nav-item nav-link active" >Sistema </div>
                    <Link className="nav-item nav-link" to={"/crear"}>Crear Empleado</Link>
                </div>
            </nav>
     <div className="container">
       <br></br>
      <Routes>

      <Route path="crear" element={<CreateInterested/>}/>

      

      </Routes>
      </div>
    </BrowserRouter>
   
  );
}

export default App;
