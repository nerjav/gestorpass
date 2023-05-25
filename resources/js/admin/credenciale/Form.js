import AppForm from '../app-components/Form/AppForm';

Vue.component('credenciale-form', {
    mixins: [AppForm],
    props: ['servidor','tipodeconexion','estados','cat_informaciones','grupo'],
    data: function() {
        return {
            form: {
                usuario:  '' ,
                contraseña:  '' ,
                enlace:  '' ,
                servidor_id:  '' ,
                tipodeconexion_id:  '' ,
                estados_id:  '' ,
                cat_informaciones_id:  '' ,
                grupo_id:  '' ,

            }
        }
    }

});
