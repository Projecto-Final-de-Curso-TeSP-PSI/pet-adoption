import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { SalesComponent } from './components/dashboards/sales/sales.component';
import { EcommerceComponent } from './components/dashboards/ecommerce/ecommerce.component';
import { AnalyticsComponent } from './components/dashboards/analytics/analytics.component';
import { CrmComponent } from './components/dashboards/crm/crm.component';
import { ProjectComponent } from './components/dashboards/project/project.component';
import { InboxComponent } from './components/dashboards/pages/inbox/inbox.component';
import { ChatComponent } from './components/dashboards/pages/chat/chat.component';
import { TodosComponent } from './components/dashboards/pages/todos/todos.component';
import { NotesComponent } from './components/dashboards/pages/notes/notes.component';
import { SearchComponent } from './components/dashboards/pages/search/search.component';
import { UiComponentsComponent } from './components/dashboards/ui-components/ui-components/ui-components.component';
import { UiAlertsComponent } from './components/dashboards/ui-components/ui-alerts/ui-alerts.component';
import { BadgesComponent } from './components/dashboards/ui-components/badges/badges.component';
import { ButtonsComponent } from './components/dashboards/ui-components/buttons/buttons.component';
import { CardsComponent } from './components/dashboards/ui-components/cards/cards.component';
import { DropdownsComponent } from './components/dashboards/ui-components/dropdowns/dropdowns.component';
import { FormsComponent } from './components/dashboards/ui-components/forms/forms.component';
import { ListGroupsComponent } from './components/dashboards/ui-components/list-groups/list-groups.component';
import { ModalsComponent } from './components/dashboards/ui-components/modals/modals.component';
import { ProgressBarsComponent } from './components/dashboards/ui-components/progress-bars/progress-bars.component';
import { TablesComponent } from './components/dashboards/ui-components/tables/tables.component';
import { TabsComponent } from './components/dashboards/ui-components/tabs/tabs.component';
import { AuthComponent } from './components/dashboards/auth/auth/auth.component';
import { SignupComponent } from './components/dashboards/auth/signup/signup.component';
import { SigninComponent } from './components/dashboards/auth/signin/signin.component';
import { ForgotPasswordComponent } from './components/dashboards/auth/forgot-password/forgot-password.component';
import { ChartsComponent } from './components/dashboards/charts/charts/charts.component';
import { LineChartsComponent } from './components/dashboards/charts/line-charts/line-charts.component';
import { AreaChartsComponent } from './components/dashboards/charts/area-charts/area-charts.component';
import { ColumnChartsComponent } from './components/dashboards/charts/column-charts/column-charts.component';
import { BarChartsComponent } from './components/dashboards/charts/bar-charts/bar-charts.component';
import { MixedChartsComponent } from './components/dashboards/charts/mixed-charts/mixed-charts.component';
import { PieDonutsChartsComponent } from './components/dashboards/charts/pie-donuts-charts/pie-donuts-charts.component';
import { IconsComponent } from './components/dashboards/icons/icons/icons.component';
import { FeatherIconsComponent } from './components/dashboards/icons/feather-icons/feather-icons.component';
import { LineIconsComponent } from './components/dashboards/icons/line-icons/line-icons.component';
import { IcofontIconsComponent } from './components/dashboards/icons/icofont-icons/icofont-icons.component';
import { OthersComponent } from './components/dashboards/others/others/others.component';
import { UsersCardComponent } from './components/dashboards/others/users-card/users-card.component';
import { NotificationsComponent } from './components/dashboards/others/notifications/notifications.component';
import { TimelineComponent } from './components/dashboards/others/timeline/timeline.component';
import { InvoiceTemplateComponent } from './components/dashboards/others/invoice-template/invoice-template.component';
import { GalleryComponent } from './components/dashboards/others/gallery/gallery.component';
import { FaqComponent } from './components/dashboards/others/faq/faq.component';
import { PricingComponent } from './components/dashboards/others/pricing/pricing.component';
import { ProfileComponent } from './components/dashboards/others/profile/profile.component';
import { ProfileSettingsComponent } from './components/dashboards/others/profile-settings/profile-settings.component';
import { ErrorComponent } from './components/dashboards/others/error/error.component';

const routes: Routes = [
    {path: '', component: SalesComponent},
    {path: 'dashboard-sales', component: SalesComponent},
    {path: 'dashboard-eCommerce', component: EcommerceComponent},
    {path: 'dashboard-analytics', component: AnalyticsComponent},
    {path: 'dashboard-crm', component: CrmComponent},
    {path: 'dashboard-project', component: ProjectComponent},
    {path: 'inbox', component: InboxComponent},
    {path: 'chat', component: ChatComponent},
    {path: 'todos', component: TodosComponent},
    {path: 'notes', component: NotesComponent},
    {path: 'search', component: SearchComponent},
    {
        path: 'ui-components', component: UiComponentsComponent,
        children: [
            {
                path: 'alerts',
                data: { breadcrumb: 'Alerts' },
                component: UiAlertsComponent
            },
            {
                path: 'badges',
                data: { breadcrumb: 'Badges' },
                component: BadgesComponent
            },
            {
                path: 'buttons',
                data: { breadcrumb: 'Buttons' },
                component: ButtonsComponent
            },
            {
                path: 'cards',
                data: { breadcrumb: 'Cards' },
                component: CardsComponent
            },
            {
                path: 'dropdowns',
                data: { breadcrumb: 'Dropdowns' },
                component: DropdownsComponent
            },
            {
                path: 'forms',
                data: { breadcrumb: 'Forms' },
                component: FormsComponent
            },
            {
                path: 'list-groups',
                data: { breadcrumb: 'List Groups' },
                component: ListGroupsComponent
            },
            {
                path: 'modals',
                data: { breadcrumb: 'Modals' },
                component: ModalsComponent
            },
            {
                path: 'progress-bars',
                data: { breadcrumb: 'Progress Bars' },
                component: ProgressBarsComponent
            },
            {
                path: 'tables',
                data: { breadcrumb: 'Tables' },
                component: TablesComponent
            },
            {
                path: 'tabs',
                data: { breadcrumb: 'Tabs' },
                component: TabsComponent
            }
        ]

    },
    {
        path: 'auth', component: AuthComponent,
        children: [
            {
                path: 'signup',
                data: { breadcrumb: 'Signup' },
                component: SignupComponent
            },
            {
                path: 'signin',
                data: { breadcrumb: 'Signin' },
                component: SigninComponent
            },
            {
                path: 'forgot-password',
                data: { breadcrumb: 'Forgot Password' },
                component: ForgotPasswordComponent
            }
        ]
    },
    {
        path: 'charts', component: ChartsComponent,
        children: [
            {
                path: 'line-charts',
                data: { breadcrumb: 'Line Charts' },
                component: LineChartsComponent
            },
            {
                path: 'area-charts',
                data: { breadcrumb: 'Area Charts' },
                component: AreaChartsComponent
            },
            {
                path: 'column-charts',
                data: { breadcrumb: 'Column Charts' },
                component: ColumnChartsComponent
            },
            {
                path: 'bar-charts',
                data: { breadcrumb: 'Bar Charts' },
                component: BarChartsComponent
            },
            {
                path: 'mixed-charts',
                data: { breadcrumb: 'Mixed Charts' },
                component: MixedChartsComponent
            },
            {
                path: 'pie-donuts-charts',
                data: { breadcrumb: 'Pie Donuts Charts' },
                component: PieDonutsChartsComponent
            }
        ]
    },
    {
        path: 'icons', component: IconsComponent,
        children: [
            {
                path: 'feather-icons',
                data: { breadcrumb: 'Feather Icons' },
                component: FeatherIconsComponent
            },
            {
                path: 'line-icons',
                data: { breadcrumb: 'Line Icons' },
                component: LineIconsComponent
            },
            {
                path: 'icofont-icons',
                data: { breadcrumb: 'Icofont Icons' },
                component: IcofontIconsComponent
            }
        ]
    },
    {
        path: 'others', component: OthersComponent,
        children: [
            {
                path: 'users-card',
                data: { breadcrumb: 'Users Card' },
                component: UsersCardComponent
            },
            {
                path: 'notifications',
                data: { breadcrumb: 'Notifications' },
                component: NotificationsComponent
            },
            {
                path: 'timeline',
                data: { breadcrumb: 'Timeline' },
                component: TimelineComponent
            },
            {
                path: 'invoice-template',
                data: { breadcrumb: 'Invoice Template' },
                component: InvoiceTemplateComponent
            },
            {
                path: 'gallery',
                data: { breadcrumb: 'Gallery' },
                component: GalleryComponent
            },
            {
                path: 'faq',
                data: { breadcrumb: 'Faq' },
                component: FaqComponent
            },
            {
                path: 'pricing',
                data: { breadcrumb: 'Pricing' },
                component: PricingComponent
            },
            {
                path: 'profile',
                data: { breadcrumb: 'Profile' },
                component: ProfileComponent
            },
            {
                path: 'profile-settings',
                data: { breadcrumb: 'Profile Settings' },
                component: ProfileSettingsComponent
            },
            {
                path: 'error-404',
                data: { breadcrumb: 'Error' },
                component: ErrorComponent
            }
        ]
    }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
