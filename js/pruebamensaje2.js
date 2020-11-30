$("#pedido1").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Asuncion',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      
     /* if (tamanio) {
        
      }*/
      /*else{
        Swal.fire({ html: 'No selecciono su tamaño de Pizza' })
      }*/
});
$("#pedido2").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Hawaina',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      

});
$("#pedido3").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Mexicana',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      

});
$("#pedido4").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Italiana',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      

});
$("#pedido5").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Azteca',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })

});
$("#pedido6").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Pepperoni',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })

});