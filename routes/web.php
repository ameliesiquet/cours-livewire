<?php

use App\Livewire\OrganizationsCreate;
use App\Livewire\OrganizationsEdit;
use App\Livewire\OrganizationsTable;
use Illuminate\Support\Facades\Route;

Route::get('/organizations', OrganizationsTable::class)->name('home');

Route::get('/organizations/{organization}/edit', OrganizationsTable::class)->name('organizations.edit');
Route::get('/organizations/create', OrganizationsTable::class)->name('organizations.create');
Route::get('/organizations/update', OrganizationsTable::class)->name('organizations.update');


