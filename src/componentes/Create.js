import axios from 'axios'
import React, {useState} from 'react'
import { useNavigate } from 'react-router-dom'
import { Formulario,Label,Input } from './../elementos/Formularios';
const endpoint = 'http://127.0.0.1:8000/api/interested'

const CreateInterested = () => {
    const [identificacion, setIdentificacion] = useState(0)
    const [nombres_apellidos, setNombres_apellidos] = useState('')
    const [fecha_nac, setFecha_nac] = useState(new Date())
    const [num_cel, setNum_cel] = useState(0 )
    const [num_conv, setNum_conv] = useState( 0)
  
    const [correo_p, setCorreo_p] = useState('')

    const [ubicacion, setUbicacion] = useState('')


   

    const store = async (e) => {
        e.preventDefault()
        await axios.post(endpoint, {identificacion: identificacion, nombres_apellidos: nombres_apellidos,
                                    fecha_nac:fecha_nac, num_cel:num_cel, num_conv:num_conv,
                                    correo_p:correo_p,ubicacion:ubicacion
                                    })
        
    }
    
  return (

     <div className="card-body">  
     <div className="card">
    <div className="card-header">
    Empleados
    </div>
    <main>
        <Formulario onSubmit={store}>
          <div>
          <Label htmlFor=''>Identificacion</Label>
          <div>
          <Input  value={identificacion}
                onChange={ (e)=> setIdentificacion(e.target.value)} type="number" placeholder='Ingrese su identificacion'></Input>
          </div>
          
          <p>Lorem</p>
          </div>
          <div>
          <Label htmlFor=''>Nombres y apellidos</Label>
          <Input value={nombres_apellidos}
                onChange={ (e)=> setNombres_apellidos(e.target.value)}  type="text" placeholder='Ingrese su identificacion'></Input>
          <p>Lorem</p>
          </div>
          <div>
          <Label htmlFor=''>Identificacion</Label>
          <Input  value={fecha_nac}
                onChange={ (e)=> setFecha_nac(e.target.value)} type="date"  placeholder='Ingrese su identificacion'></Input>
          <p>Lorem</p>
          </div>
          <br></br>
          <button  type="submit" className="btn btn-success">Agregar empleado</button>
        </Formulario>
    </main>
    </div>
   


    </div>

  )
}

export default CreateInterested