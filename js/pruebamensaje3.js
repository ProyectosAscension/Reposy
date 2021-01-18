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

$("#pedido_hamburguesa").click(function(){
  const inputOptions = new Promise((resolve) => {
      setTimeout(() => {
        resolve({
          'hawaina': 'Hawaina',
          'clasica': 'Clasica',
          'doble': 'Doble'
        })
      }, 1000)
    })
    
    const { value: tamanio } = Swal.fire({
      title: 'Seleccione tipo de <br>Hamburguesa',
      input: 'radio',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      inputOptions: inputOptions,
      cancelButtonText:'Cancelar Compra',
      confirmButtonText:'Añadir al pedido',
      footer:'Costos: <br>Hamburguesa Hawaina: $60.00 MXN <br>Hamburguesa Clasica: $45.00 MXN <br>Hamburguesa Doble: $80.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
      allowOutsideClick:false,
      allowEscapeKey:false,
      allowEnterKey:false,
      stopKeydpwnPropagation:false,
      inputValidator: (value) => {
        if (!value) {
          return 'Debe escoger Hanburguesa a ordenar'
        }
       else{
            if(value=='hawaina')
            {
              return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Hamburguesa seleccionada: Hawaina' })
            }
            if(value=='clasica')
            {
              return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Hamburguesa seleccionada: Clasica' })
            }
            if(value=='doble')
            {
              return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Hamburguesa seleccionada: Doble' })
            }
            return ''
        }
      }
      
    })

});

$("#pedido_hotdog").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'hsolo': '1 Hotdog',
            'hdoble': '2 Hotdogs',
            'htriple': '3 Hotdogs'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione cantidad de <br>Hotdogs',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>1 Hotdog: $15.00 MXN <br>2 Hotdogs: $30.00 MXN <br>3 Hotdogs: $40.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger Hotdogs para ordenar'
          }
         else{
              if(value=='hsolo')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado 1 Hotdog' })
              }
              if(value=='hdoble')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado 2 Hotdogs' })
              }
              if(value=='htriple')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado 3 Hotdogs' })
              }
              return ''
          }
        }
        
      })
  
  });

  $("#pedido_alita").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'alitabbq': 'Alitas Barbiquiu',
            'alitachipotle': 'Alitas Chipotle',
            'alitahabanero': 'Alitas Habanero'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione orden de <br>Alitas',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Orden Alitas Barbiquiu: $70.00 MXN <br>Orden Alitas Chipotle: $70.00 MXN <br>Orden Alitas Habanero: $80.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger una orden de alitas'
          }
         else{
              if(value=='alitabbq')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de alitas Barbiquiu'})
              }
              if(value=='alitachipotle')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de alitas Chipotle' })
              }
              if(value=='alitahabanero')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado orden de alitas Habanero' })
              }
              return ''
          }
        }
        
      })
  
  });

  $("#pedido_torta").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'hawaina': 'Torta Hawaina',
            'cubana': 'Torta Cubana',
            'jamon': 'Torta de Jamon',
            'chorizo':'Torta de Chorizo'

          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tipo de <br>Torta',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Torta Hawaina: $60.00 MXN <br>Torta Cubana: $60.00 MXN <br>Torta de jamon: $30.00 MXN<br>Torta de Chorizo: $30.00 MXN<br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger una Torta'
          }
         else{
              if(value=='hawaina')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta Hawaina'})
              }
              if(value=='cubana')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta Cubana' })
              }
              if(value=='jamon')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta de Jamon' })
              }
              if(value=='chorizo')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta de Chorizo' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_papas").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'papachica': 'Orden Papas Chicas',
            'papamedianas': 'Orden Papas Medianas',
            'papagrande': 'Orden Papas Grandes'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tipo de Orden de <br>Papas',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Orden de Papas Chicas: $30.00 MXN <br>Orden de Papas Medianas: $45.00 MXN <br>Orden de Papas Grandes: $60.00 MXN<br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger una Orden de Papas'
          }
         else{
              if(value=='papachica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de Papas Chicas'})
              }
              if(value=='papamedianas')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de Papas Medianas' })
              }
              if(value=='papagrande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de Papas Grande' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_refresco3").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'coca3': 'Coca Cola',
            'fanta3': 'Fanta',
            'sprite3': 'Sprite',
            'fresca3': 'Fresca'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione su Refresco <br>3 Litros',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Refrescos 3 Litros: $35.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un Refresco'
          }
         else{
              if(value=='coca3')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Coca Cola 3 Litros'})
              }
              if(value=='fanta3')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fanta 3 Litros' })
              }
              if(value=='sprite3')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Sprite 3 Litros' })
              }
              if(value=='fresca3')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fresca 3 Litros' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_refresco2").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'coca2': 'Coca Cola',
            'fanta2': 'Fanta',
            'sprite2': 'Sprite',
            'fresca2': 'Fresca'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione su Refresco <br>2 Litros',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Refrescos 2 Litros: $30.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un Refresco'
          }
         else{
              if(value=='coca2')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Coca Cola 2 Litros'})
              }
              if(value=='fanta2')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fanta 2 Litros' })
              }
              if(value=='sprite2')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Sprite 2 Litros' })
              }
              if(value=='fresca2')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fresca 2 Litros' })
              }
              return ''
          }
        }
        
      })
  
  });

  $("#pedido_refresco600").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'coca600': 'Coca Cola',
            'fanta600': 'Fanta',
            'sprite600': 'Sprite',
            'fresca600': 'Fresca'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione su Refresco <br>600 ml',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Refrescos 600 mililitros: $15.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un Refresco'
          }
         else{
              if(value=='coca600')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Coca Cola 600 mililitros'})
              }
              if(value=='fanta600')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fanta 600 mililitros' })
              }
              if(value=='sprite600')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Sprite 600 mililitros' })
              }
              if(value=='fresca600')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fresca 600 mililitros' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_agua").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'aguachica': 'Agua 600 ml',
            'aguagrande': 'Agua 1 Litro'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su <br>Agua',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Agua 600 ml: $8.00 MXN <br>Agua 1 litro: $15.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de Agua'
          }
         else{
              if(value=='aguachica')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Agua 600 mililitros'})
              }
              if(value=='aguagrande')
              {
                return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Agua 1 Litro' })
              }
              return ''
          }
        }
        
      })
  
  });
  