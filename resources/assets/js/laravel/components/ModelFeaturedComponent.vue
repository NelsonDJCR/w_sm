<template>
    <div class="row">

        
        <div>
            <h3></h3>
        </div>

        <div class="row col-12">

            <div class="col-md-3 col-lg-3 col-xl-3 fadeIn"  v-for="item in list" :key="item.id">
                <a class="card" :href="item.slug">
                    <div class="card" >
                        <h3 class="title-card-smirrow">{{item.user.city}}</h3>
                        <div class="content-img-card">
                            <div class="jsjsj">
                                 <!-- :src="item.cover" -->
                                <img class="card-img-top img-card-smirrow" :src="item.cover" alt="Card image cap">
                            </div>
                        </div>
                        <div class="card-body-smirrow">
                            <p class="card-text p-3"><o class="col-12">{{item.user.name}}</o> </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- <div class="col-md-3 col-lg-3 col-xl-3 fadeIn"  v-for="item in list" :key="item.id">
            <a class="options-container block block-rounded block-link-pop block-bordered" :href="item.slug">
                <div class="block-header bg-black" style="padding: 0.5rem;">
                   <h3 class="h4 font-w400 mb-1 text-white " >ID #<b v-text="item.id"></b> <b v-text="item.user.name"></b>, <b v-text="item.user.city"></b> </h3>
                </div>
                <img :src="item.cover" alt="" class="img-fluid options-item">
                <div class="options-overlay">
                    <div class="options-overlay-content" style="    bottom: 0px;    position: absolute;    background: #000000d9;    width: 100%;">

                        <p class="text-white mb-1" style="font-size: 0.8rem" >Ciudad: <br>Estatura: <b v-text="item.user.height"></b><br>Talentos: <b v-text="item.user.talents"></b></p>

                    </div>
                </div>

            </a>
        </div> -->
        <div class="row">
            <infinite-loading @infinite="infiniteHandler">
                <div slot="no-more">Fin de resultados</div>
            </infinite-loading>
        </div>
    </div>
</template>

<style>

.card-body-smirrow{
    background: #E71C79;
    cursor: pointer;
    z-index: 5;
}

.content-img-card{
    width: 100%;
    height: 350px;
    overflow: hidden;
    z-index: 1;
}

.img-card-smirrow{
    width: 100%;
    height: 350px;
    object-fit: cover;
    width: 100%;
    transition: all .2s;
    cursor: pointer;
}
.img-card-smirrow:hover{
    transform: scale(1.2);
}
.title-card-smirrow{
    z-index: 5;
    background: rgba(0, 0, 0, 0.342);
    padding: 2px;
    color: white;
    padding: 5px 10px;
    font-size: 18px;
}
.title-card,.card-text{
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
</style>

<script>
    export default {
        props: {
            routeUrl: String,
        },
        data() {
            return {
                list: [],
                page: 0,
                baseUrl: this.$baseURL
            }
        },
        methods: {
            infiniteHandler($state) {
                this.page++;
                let url = this.routeUrl + '?page=' + this.page;
                axios.get(url)
                    .then(response => {
                        let models = response.data.data;

                        if (models.length) {
                            this.list = this.list.concat(models);
                            $state.loaded()
                        } else {
                            $state.complete();
                        }
                    });
            }

            

        }
    }
</script>
