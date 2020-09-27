<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>

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
    </div>
</template>

<script>
    export default {
        props: ['users'],
        data() {
            return {}
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
