import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { TopNavComponent } from './components/layout/top-nav/top-nav.component';
import { SideNavComponent } from './components/layout/side-nav/side-nav.component';
import { FooterComponent } from './components/layout/footer/footer.component';
import { SalesComponent } from './components/dashboards/sales/sales.component';
import { ColorCustomizerComponent } from './components/layout/color-customizer/color-customizer.component';
import { PreloaderComponent } from './components/layout/preloader/preloader.component';
import { MonthlySalesStatisticsComponent } from './components/charts/monthly-sales-statistics/monthly-sales-statistics.component';
import { SalesByCountriesComponent } from './components/charts/sales-by-countries/sales-by-countries.component';
import { EcommerceComponent } from './components/dashboards/ecommerce/ecommerce.component';
import { OrderSummaryComponent } from './components/charts/order-summary/order-summary.component';
import { ApexAreaChartComponent } from './components/charts/apex-area-chart/apex-area-chart.component';
import { AnalyticsComponent } from './components/dashboards/analytics/analytics.component';
import { VisitorsOverviewComponent } from './components/charts/visitors-overview/visitors-overview.component';
import { LeadsStatsComponent } from './components/charts/leads-stats/leads-stats.component';
import { RevenueByCountriesComponent } from './components/charts/revenue-by-countries/revenue-by-countries.component';
import { CrmComponent } from './components/dashboards/crm/crm.component';
import { TotalSalesComponent } from './components/charts/total-sales/total-sales.component';
import { WeeklyTargetComponent } from './components/charts/weekly-target/weekly-target.component';
import { ProjectComponent } from './components/dashboards/project/project.component';
import { MonthlyHoursComponent } from './components/charts/monthly-hours/monthly-hours.component';
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
import { SignupComponent } from './components/dashboards/auth/signup/signup.component';
import { AuthComponent } from './components/dashboards/auth/auth/auth.component';
import { SigninComponent } from './components/dashboards/auth/signin/signin.component';
import { ForgotPasswordComponent } from './components/dashboards/auth/forgot-password/forgot-password.component';
import { LineChartsComponent } from './components/dashboards/charts/line-charts/line-charts.component';
import { ChartsComponent } from './components/dashboards/charts/charts/charts.component';
import { AreaChartsComponent } from './components/dashboards/charts/area-charts/area-charts.component';
import { ColumnChartsComponent } from './components/dashboards/charts/column-charts/column-charts.component';
import { BarChartsComponent } from './components/dashboards/charts/bar-charts/bar-charts.component';
import { MixedChartsComponent } from './components/dashboards/charts/mixed-charts/mixed-charts.component';
import { PieDonutsChartsComponent } from './components/dashboards/charts/pie-donuts-charts/pie-donuts-charts.component';
import { LineChartComponent } from './components/charts/line-chart/line-chart.component';
import { LineWithDataLabelsComponent } from './components/charts/line-with-data-labels/line-with-data-labels.component';
import { AnnotationsChartComponent } from './components/charts/annotations-chart/annotations-chart.component';
import { GradientChartComponent } from './components/charts/gradient-chart/gradient-chart.component';
import { DashedChartComponent } from './components/charts/dashed-chart/dashed-chart.component';
import { SplineAreaChartComponent } from './components/charts/spline-area-chart/spline-area-chart.component';
import { NegativeAreaChartComponent } from './components/charts/negative-area-chart/negative-area-chart.component';
import { StackedAreaChartComponent } from './components/charts/stacked-area-chart/stacked-area-chart.component';
import { ColumnChartComponent } from './components/charts/column-chart/column-chart.component';
import { ColumnWithDataLabelsComponent } from './components/charts/column-with-data-labels/column-with-data-labels.component';
import { StackedColumnsComponent } from './components/charts/stacked-columns/stacked-columns.component';
import { StackedColumnsHundredComponent } from './components/charts/stacked-columns-hundred/stacked-columns-hundred.component';
import { ColumnWithNegativeValuesComponent } from './components/charts/column-with-negative-values/column-with-negative-values.component';
import { BarChartComponent } from './components/charts/bar-chart/bar-chart.component';
import { GroupedChartComponent } from './components/charts/grouped-chart/grouped-chart.component';
import { StackedBarChartComponent } from './components/charts/stacked-bar-chart/stacked-bar-chart.component';
import { StackedBarHundredComponent } from './components/charts/stacked-bar-hundred/stacked-bar-hundred.component';
import { DatalabelsBarComponent } from './components/charts/datalabels-bar/datalabels-bar.component';
import { MixedChartsLineColumnComponent } from './components/charts/mixed-charts-line-column/mixed-charts-line-column.component';
import { MixedMultipleYAxisComponent } from './components/charts/mixed-multiple-y-axis/mixed-multiple-y-axis.component';
import { MixedLineAreaChartsComponent } from './components/charts/mixed-line-area-charts/mixed-line-area-charts.component';
import { MixedLineColumnAreaChartComponent } from './components/charts/mixed-line-column-area-chart/mixed-line-column-area-chart.component';
import { SimplePieChartComponent } from './components/charts/simple-pie-chart/simple-pie-chart.component';
import { SimpleDonutChartComponent } from './components/charts/simple-donut-chart/simple-donut-chart.component';
import { MonochromePieChartComponent } from './components/charts/monochrome-pie-chart/monochrome-pie-chart.component';
import { GradientDonutChartComponent } from './components/charts/gradient-donut-chart/gradient-donut-chart.component';
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

@NgModule({
  declarations: [
    AppComponent,
    TopNavComponent,
    SideNavComponent,
    FooterComponent,
    SalesComponent,
    ColorCustomizerComponent,
    PreloaderComponent,
    MonthlySalesStatisticsComponent,
    SalesByCountriesComponent,
    EcommerceComponent,
    OrderSummaryComponent,
    ApexAreaChartComponent,
    AnalyticsComponent,
    VisitorsOverviewComponent,
    LeadsStatsComponent,
    RevenueByCountriesComponent,
    CrmComponent,
    TotalSalesComponent,
    WeeklyTargetComponent,
    ProjectComponent,
    MonthlyHoursComponent,
    InboxComponent,
    ChatComponent,
    TodosComponent,
    NotesComponent,
    SearchComponent,
    UiComponentsComponent,
    UiAlertsComponent,
    BadgesComponent,
    ButtonsComponent,
    CardsComponent,
    DropdownsComponent,
    FormsComponent,
    ListGroupsComponent,
    ModalsComponent,
    ProgressBarsComponent,
    TablesComponent,
    TabsComponent,
    SignupComponent,
    AuthComponent,
    SigninComponent,
    ForgotPasswordComponent,
    LineChartsComponent,
    ChartsComponent,
    AreaChartsComponent,
    ColumnChartsComponent,
    BarChartsComponent,
    MixedChartsComponent,
    PieDonutsChartsComponent,
    LineChartComponent,
    LineWithDataLabelsComponent,
    AnnotationsChartComponent,
    GradientChartComponent,
    DashedChartComponent,
    SplineAreaChartComponent,
    NegativeAreaChartComponent,
    StackedAreaChartComponent,
    ColumnChartComponent,
    ColumnWithDataLabelsComponent,
    StackedColumnsComponent,
    StackedColumnsHundredComponent,
    ColumnWithNegativeValuesComponent,
    BarChartComponent,
    GroupedChartComponent,
    StackedBarChartComponent,
    StackedBarHundredComponent,
    DatalabelsBarComponent,
    MixedChartsLineColumnComponent,
    MixedMultipleYAxisComponent,
    MixedLineAreaChartsComponent,
    MixedLineColumnAreaChartComponent,
    SimplePieChartComponent,
    SimpleDonutChartComponent,
    MonochromePieChartComponent,
    GradientDonutChartComponent,
    IconsComponent,
    FeatherIconsComponent,
    LineIconsComponent,
    IcofontIconsComponent,
    OthersComponent,
    UsersCardComponent,
    NotificationsComponent,
    TimelineComponent,
    InvoiceTemplateComponent,
    GalleryComponent,
    FaqComponent,
    PricingComponent,
    ProfileComponent,
    ProfileSettingsComponent,
    ErrorComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
