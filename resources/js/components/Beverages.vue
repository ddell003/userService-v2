<template>
    <div>
        <br><br><br>

        <h2>Beverages
            <button type="button" class="btn btn-primary pull-right">
                Total Caffeine <span class="badge badge-light">{{totalCaffine}} mg</span>
            </button>
        </h2>


        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Caffeine</th>
                <th scope="col">Servings</th>
                <th scope="col">Amount Remaining</th>
                <th scope="col">Count</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="beverage in beverageList" :beverage="beverage" v-bind:key="beverage.id">
                <th scope="row">{{beverage.name}}</th>
                <td>{{beverage.caffeine}}mg</td>
                <td>{{beverage.servings}}</td>
                <td>
                    {{amountRemaining(beverage)}}
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">

                        <button type="button" class="btn btn-danger" @click="subBeverage(beverage)" v-if="beverage.count > 0">-</button>
                        <button type="button" class="btn btn-danger" v-else disabled>-</button>

                        <button type="button" class="btn btn-secondary">{{beverage.count}}</button>
                        <button type="button" class="btn btn-danger" v-on:click="addBeverage(beverage)" v-if="canHaveAnother(beverage)">+</button>
                        <button type="button" class="btn btn-danger"  v-else disabled>+</button>
                    </div>
                    <br>
                    <span class="text-danger" v-if="! canHaveAnother(beverage)"><em>*Cannot have another</em></span>
                </td>

            </tr>

            </tbody>
        </table>
    </div>

</template>

<script>
    /**
     * @todo: on beverage selection make api call (set up axios and api routes to point to controller)
     * @todo make a table called user_beverage_consumption to track how many a user has had in a day
     * @todo make a table called user_beverage_consumption to track how many a user has had in a day
     */
    export default {
        name: "beverages",
        props : ['beverages'],
        computed: {

        },
        methods:{
            amountRemaining(beverage){
                return Math.floor((this.maxLevel - this.totalCaffine) / (beverage.caffeine * beverage.servings));
            },
            canHaveAnother(beverage){
                return (this.maxLevel >= ((beverage.caffeine * beverage.servings) + this.totalCaffine));
            },
            subBeverage(beverage){

                if(beverage.count != 0){
                    beverage.count--;
                }

                this.totalCaffine = this.totalCaffine  - (beverage.caffeine * beverage.servings);

            },
            addBeverage(beverage){

                let newTotal = (beverage.caffeine * beverage.servings) + this.totalCaffine;

                if(this.maxLevel >= newTotal){
                    this.totalCaffine = newTotal;
                    beverage.count++;
                }

            }
        },
        data() {
            return {
                maxLevel:500,
                totalCaffine:0,
                canSubItems:false,
                canAddItems:true,
                beverageList:this.beverages

            }
        }
    }
</script>

<style scoped>
    html, body {
        background-color: #fff;
        color: #939b9f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin:5px;
    }
    .title {
        font-size: 60px;
    }
    .subtitle {
        font-size: 20px;
    }
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {

    }
    .m-b-md {
        margin-bottom: 30px;
    }
</style>