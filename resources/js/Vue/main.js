import { createApp } from "vue";
import { useRouter } from 'vue-router';

import App from "./App.vue";
import ShowService from "./components/admin/services/ShowService.vue";
import EditService from "./components/admin/services/EditServices.vue";
import WorkSpecifics from "./components/admin/services/WorkSpecifics.vue";
import DetailsService from "./components/admin/services/DetailsService.vue";
import BiographyService from "./components/admin/services/BiographyService.vue";
import AdditionalInfoService from "./components/admin/services/AdditionalInfoService.vue";
import GalleryPicksServices from "./components/admin/services/GalleryPicksServices.vue";
import ExtrasServices from "./components/admin/services/ExtrasService.vue";



const app = createApp(App);
const ShowServiceApp = createApp(ShowService);
const EditServiceApp = createApp(EditService);
const WorkSpecificsApp = createApp(WorkSpecifics);
const DetailsServiceApp = createApp(DetailsService);
const BiographyServiceApp = createApp(BiographyService);
const AdditionalInfoServiceApp = createApp(AdditionalInfoService);
const GalleryPicksServicesApp = createApp(GalleryPicksServices);
const ExtrasServicesApp = createApp(ExtrasServices);



app.mount("#app")
ShowServiceApp.mount("#show-service");
EditServiceApp.mount("#edit-service");
WorkSpecificsApp.mount("#work-specifics");
DetailsServiceApp.mount("#details-service");
BiographyServiceApp.mount("#biography-service");
AdditionalInfoServiceApp .mount("#additional-info");
GalleryPicksServicesApp.mount("#gallery-picks");
ExtrasServicesApp.mount("#extra-services");
