<template>
  <div class="card">
    <div id="basicScenario" class="jsgrid" style="position: relative; height: auto; width: 100%;">
      <div class="jsgrid-grid-header jsgrid-header-scrollbar">

          <layout ref="layout">
            <paginate name="items" :list="items" class="paginate-list" :per="10" :container="this">
        <table class="jsgrid-table">
          <tr class="jsgrid-header-row">
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" style="width:50px;">Nr
            </th>
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center">User
            </th>
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center">Nume
            </th>
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center">Telefon
            </th>
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" style="width:300px;">Email
            </th>
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" style="width:150px;">Comenzi
            </th>
            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" style="width:150px;">Optiuni
            </th>
          </tr>

          <tr v-for="row in paginated('items')" class="jsgrid-alt-row wow bounceInDown">
            <td class="jsgrid-cell jsgrid-align-center" ></td>
            <td class="jsgrid-cell jsgrid-align-center" >{{ row.nume }}</td>
            <td class="jsgrid-cell jsgrid-align-center" ></td>
            <td class="jsgrid-cell jsgrid-align-center" ><span style="user-select: all;"></span></td>
            <td class="jsgrid-cell jsgrid-align-center"  style="width:300px;"><span style='user-select: all;'></span></td>
            <td class="jsgrid-cell jsgrid-align-center"  style="width:150px;"></td>
            <td class="jsgrid-cell jsgrid-align-center"  style="width:100px;">
              <form action="" style="float: left; margin-right:10px;margin-left:10px;">
                <input type="hidden" name="edit" value="ok">
                <button class="jsgrid-button jsgrid-edit-button" type="submit" name="id" value="" title="Modifica user"></button>
              </form>
              <form action='' style='float: left;'>
                <button class="jsgrid-button jsgrid-delete-button" value="" type="submit" name="delid" title="Elimina user" data-bs-original-title="" data-bs-toggle="modal" onclick="return cfsterg()"></button>
              </form>
            </td>
          </tr>


        </table>
          </paginate>
          <paginate-links for="items" :simple="{
        next: 'Next »',
        prev: '« Back'
      }" :async="true"
              :classes="{
    'ul': 'simple-links-container',
    '.next > a': 'next-link',
    '.prev > a': ['prev-link', 'another-class']
  }"  ></paginate-links>
          </layout>
        <div>
<!--          <paginate-links for="items" :show-step-links="true" :async="true"></paginate-links>-->
<!--          <paginate-links for="items" :limit="2" :show-step-links="true" :async="true"></paginate-links>-->

        </div>
        </div>
      </div>
    </div>
</template>
<script>
import Service from "../services/Service";
import axios from "axios";
export default {
  name: "producatori",
  data() {
    return {
      tutorials: [],
      currentTutorial: null,
      currentIndex: -1,
      page: 1,
      count: 0,
      pageSize: 20,
      pageSizes: [3, 6, 9],
      title: "",
      items:'',
      paginate: ['items']
    };
  },
  methods: {
    afisare() {
      axios.get('http://localhost:8000/api/producatori')
          .then(response => (
      this.items = response.data
          ))
    }
  },
  mounted() {
    // setTimeout(() => {
    //   this.shown = true
    // }, 1000)
    this.afisare();
  }
};
</script>