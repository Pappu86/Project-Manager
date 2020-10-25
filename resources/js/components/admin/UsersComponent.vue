<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Users</h1>
                    <div class="card-title-button-group">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">add
                            user</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{user.name}}</td>
                            <td>{{user.email}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--                        <div v-for="user in users" :key="user.id">-->
                    <!--                            {{user.name}}:{{user.email}}-->
                    <!--                        </div>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'user-list',
        props: ['users'],
        data() {
            return {}
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
