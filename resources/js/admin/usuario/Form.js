import AppForm from '../app-components/Form/AppForm';

Vue.component('usuario-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                usuario:  '' ,
                contraseña:  '' ,
                enlace:  '' ,
                servidor_id:  '' ,
                
            }
        }
    }

});