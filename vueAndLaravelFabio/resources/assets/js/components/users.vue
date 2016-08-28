<script>
    export default {
        props: ['users'],

        data () {
            return {
                list: []
            }
        },

        ready() {
            this.list = JSON.parse(this.users);
        }
    }
</script>
<template>
    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody v-for="u in list">
                <tr>
                    <td>{{ u.name }}</td>
                    <td>{{ u.email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<style scoped=""></style>