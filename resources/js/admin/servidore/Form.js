import AppForm from '../app-components/Form/AppForm';

Vue.component('servidore-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                ip:  '' ,
                puerto:  '' ,
                tipodeconexion_id:  '' ,
                
            }
        }
    }

});