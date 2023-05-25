import AppForm from '../app-components/Form/AppForm';

Vue.component('servidor-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                grupo_id:  '' ,
                ip:  '' ,
                puerto:  '' ,
                tipodeconexion_id:  '' ,
                
            }
        }
    }

});