<template>
    <div class="container mt-4">
        <table>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Verify?</th>
                <th class="text-center">UIID</th>
                <th class="text-center">Actions</th>
            </tr>
            <tr v-for="i in 30">
                <td class="text-center">{{i}}</td>
                <td class="text-center">Maria Anders</td>
                <td class="text-center">test@test.com</td>
                <td class="text-center">ja</td>
                <td class="text-center">123445675</td>
                <td class="action">
                    <span>
                        <input class="btn btn-info" type="button" value="Update">
                    </span>
                    <span>
                        <input class="btn btn-danger" type="button" value="löschen">
                    </span>
                </td>
            </tr>
        </table>
    </div>

</template>

<script>

</script>

<style scoped>
    .action{
        display: flex;
        justify-content:space-around;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
