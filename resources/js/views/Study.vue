<template>
    <div>
        <bread use-bread :disable="[0]" />

        <b-container v-if="ready" class="my-4">
            <b-row>
                <b-col sm="12" md="8" lg="8">
                    <div class="detail-img">
                        <img :src="sauce('storage/' + data.banner)" :alt="appName" />
                    </div>
                    <div class="detail-post">
                        <div class="detail-label">
                            <p>{{ $t('navbar.study') }}</p>
                        </div>
                        <markdown :content="data.content" />
                        <share :title="data.title" />
                    </div>
                </b-col>
                <b-col sm="12" md="4" lg="4">
                    <h3>{{ dataa.title }}</h3>
                    <v-img :src="sauce('storage/' + dataa.url)" class="my-2" />
                    <markdown :content="dataa.content" />
                </b-col>
            </b-row>
        </b-container>
        <b-container v-else class="text-center p-5">
            <b-spinner variant="bpi-blue" style="width: 3rem;height: 3rem" />
        </b-container>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    data: () => ({
        data: null,
        dataa: null,
        ready: false
    }),
    mounted(){
        this.render()
    },
    methods: {
        render(){
            const g = this.global[this.id]

            this.ready = false

            if(g){
                if(typeof g.data === 'boolean')
                    this.$router.push('/404')
                else this.setData(g)
            }else axios.get('study/' + this.id)
                .then(r => {
                    if(r.data){
                        this.setData(r.data)
                        this.setGlobal({ name: this.id, data: r.data })
                    }else{
                        this.setGlobal({ name: this.id, data: false })
                        this.$router.push('/404')
                    }
                })
        },
        setData(data){
            this.data = data
            this.dataa = JSON.parse(data.content_2)
            this.ready = true
        },
        ...mapActions(['setGlobal'])
    },
    computed: {
        id(){
            return this.$route.params.slug
        },
        ...mapGetters(['global'])
    },
    watch: {
        '$route.params.slug': function() {
            this.render()
        }
    },
}
</script>
