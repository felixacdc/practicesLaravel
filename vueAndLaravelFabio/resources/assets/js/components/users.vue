<script>
    export default {
        props: ['users'],

        data () {
            return {
                sortProperty: 'name',
                sortDirection: 1,
                filterTerm: ''
            }
        },

        methods: {
            sort (ev, property) {

                ev.preventDefault();

                this.sortProperty = property;

                if ( this.sortDirection == 1 ) {
                    this.sortDirection = -1;
                } else {
                    this.sortDirection = 1;
                }
            }
        },

        ready() {
            this.$http.get('/api/usuarios/listar').then( (req) => this.users = req.data );
        }
    }
</script>
<template>
    <div>
        <div class="well">
            <input type="text" class="form-control" placeholder="Filtro de la lista" v-model="filterTerm">
        </div>
        <pre>{{ [sortProperty, sortDirection] | json }}</pre>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <a href="#" @click="sort($event, 'name')">Name</a>
                    </th>
                    <th>
                        <a href="#" @click="sort($event, 'email')">Email</a>
                    </th>
                </tr>
            </thead>
            <tbody v-for="u in users | filterBy filterTerm | orderBy sortProperty sortDirection">
                <tr>
                    <td>{{ u.name }}</td>
                    <td>{{ u.email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<style scoped=""></style>