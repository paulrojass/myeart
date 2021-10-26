<template>
    <div>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
            <li class="breadcrumb-item active" aria-current="page">Transacciones</li>
          </ol>
        </nav>
        <h1>Listado de Transacciones</h1>

        <div class="card">

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Comprador</th>
              <th scope="col">Vendedor</th>
              <th scope="col">Obra</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in items" :key="item.key">
              <th scope="row">{{item.id}}</th>
              <td>{{item.user.name}}</td>
              <td>{{item.artwork.seller.user.name}}</td>
              <td>
                  {{item.artwork.name}}
              </td>
              <td>
                  <inertia-link class="btn btn-primary btn-sm" :href="route('artworks.show', item.id)" role="button">ver</inertia-link>
                  <inertia-link class="btn btn-primary btn-sm" :href="route('artworks.edit', item.id)" role="button">editar</inertia-link>
                  <inertia-link class="btn btn-primary btn-sm" :href="route('dashboard.artworks.destroy', item.id)" role="button" method="delete">eliminar</inertia-link>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
    </div>
</template>

<script>
import Layout from '@/Layouts/Authenticated'

export default{
    name: "panel-transactions",
    props:['buys'],
    data() {
      return {
        items: this.artworks
      }
    },
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
      return {
        title: `Panel - Inicio`
      }
    },
}

</script>
