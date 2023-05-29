import AppForm from '../app-components/Form/AppForm';

Vue.component('servidor-form', {
    mixins: [AppForm],
    props: ['tipodeconexion','grupo'],

    data: function() {
        return {
            form: {
                grupo:  '' ,
                ip:  '' ,
                puerto:  '' ,
<<<<<<< HEAD
                tipodeconexion:  '' ,
=======
                tipodeconexion_id:  '' ,
>>>>>>> main

            }
        }
    }

});
