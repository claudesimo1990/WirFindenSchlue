<template>
    <div class="col-md-6">
        <div class="contact-content">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Pate Infos
                </a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Anrede</span><span class="item">{{form.anrede ? form.anrede : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Vorname</span><span class="item">{{form.vorname ? form.vorname : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Nachname</span><span class="item">{{form.nachname ? form.nachname : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Email</span><span class="item">{{form.email ? form.email : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Phone</span><span class="item">{{form.phone ? form.phone : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Straße</span><span class="item">{{form.straße ? form.straße : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Stadt</span><span class="item">{{form.stadt ? form.stadt : ''}}</span></a>
                <a href="#" class="list-group-item list-group-item-action"><span class="item-title">PLZ</span><span class="item">{{form.plz ? form.plz : ''}}</span></a>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:{
            form: Object,
        },

    }
</script>
