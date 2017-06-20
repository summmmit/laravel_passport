@extends('layouts.app')

@section('content')

<div ng-app="LoginForm" ng-cloak >

    <md-content ng-controller="Ctrl" id="popupContainer" layout="row" layout-align="space-around" layout-padding="layout-padding" ng-cloak="ng-cloak" class="login-form">
    
      <md-card flex="flex" flex-gt-sm="50" flex-gt-md="33">
        <md-toolbar>
          <div class="md-toolbar-tools">
            <h2><span>Mesh Login</span></h2>
          </div>
        </md-toolbar>
        <md-card-content>
          <form name="Form">
            <md-input-container class="md-block">
              <label>Login</label>
              <input type="text" name="email" ng-model="vm.formData.email" placeholder="login" required=""/>
              <div ng-messages="Form.email.$error" role="alert" multiple="">
                <div ng-message="required" class="my-message">Please enter your email.</div>
              </div>
            </md-input-container>
            <md-input-container class="md-block">
              <label>Password</label>
              <input type="password" name="password" ng-model="vm.formData.password" placeholder="password" required="" md-maxlength="16"/>
              <div ng-messages="Form.password.$error" role="alert" multiple="">
                <div ng-message="required" class="my-message">Please enter your password.</div>
                <div ng-message="md-maxlength" class="my-message">Too long.</div>
              </div>
            </md-input-container>
            <md-button ng-disabled="!Form.$valid" ng-click="vm.login()" class="md-raised md-primary">&nbsp Login &nbsp</md-button>
          </form>
        </md-card-content>
      </md-card>
    </md-content>
</div>

@endsection
