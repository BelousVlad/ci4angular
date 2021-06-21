import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import { first, map } from 'rxjs/operators';
import { Player } from '../domain__model/Player';

@Injectable({
  providedIn: 'root'
})
export class PlayerService {

  static url: string = 'http://ci4angular/public/api/players';

  constructor(private http: HttpClient) { }

  getPlayers()
  {
    return this.http.get<Array<Player>>(PlayerService.url)
  }
}
